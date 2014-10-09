<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2014-10-01 01:56:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 01:56:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 01:56:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 01:56:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 01:56:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 01:56:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 01:56:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 01:56:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 01:59:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 01:59:07 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY u.`id` AND u.`group` =  '50' AND u.`status` = 0' at line 1 with query: "SELECT *, u.`id` AS `uid` FROM  `users` AS u INNER JOIN  `departments` AS d ON u.`department` = d.`id` INNER JOIN `subjects` AS s ON u.`id` = s.`teacher_id` WHERE GROUP BY u.`id` AND u.`group` =  '50' AND u.`status` = 0" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 01:59:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 01:59:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:00:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:00:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:02:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:02:56 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY s.`subj_code`' at line 1 with query: "SELECT * FROM `subjects` AS s INNER JOIN `users` AS u ON s.`teacher_id` = u.`id` WHERE GROUP BY s.`subj_code`" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 02:02:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:04:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:04:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:04:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:04:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:05:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:05:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:05:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:06:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:07:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:07:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:08:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:08:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:10:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:10:44 --> Notice - Undefined index:  in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\index.php on line 21
WARNING - 2014-10-01 02:10:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:10:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:11:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:11:24 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'GROUP BY u.`id` u.`group` =  '50' AND u.`status` = 0' at line 1 with query: "SELECT *, u.`id` AS `uid` FROM  `users` AS u INNER JOIN  `departments` AS d ON u.`department` = d.`id` INNER JOIN `subjects` AS s ON s.`teacher_id` = u.`id` WHERE GROUP BY u.`id` u.`group` =  '50' AND u.`status` = 0" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 02:11:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:12:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:12:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:13:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:14:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:14:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:14:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:16:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:16:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:16:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:17:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:17:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:19:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:19:32 --> Notice - Undefined index: sid in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\admin\studentevaluation.php on line 10
WARNING - 2014-10-01 02:20:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:20:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:22:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:22:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:22:24 --> Notice - Undefined offset: 0 in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\index.php on line 34
WARNING - 2014-10-01 02:22:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:22:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:22:41 --> Notice - Undefined index: ids in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\index.php on line 32
WARNING - 2014-10-01 02:22:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:22:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:23:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:23:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:25:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:25:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:25:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:26:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:26:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:26:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:26:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:26:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:26:47 --> Warning - Invalid argument supplied for foreach() in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\index.php on line 30
WARNING - 2014-10-01 02:26:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:27:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:27:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:30:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:31:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:31:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:31:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:31:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:32:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:32:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:32:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:32:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:35:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:35:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:35:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:35:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:35:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:35:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:40:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:40:29 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` = '32' AND subj_id = '2' ) AS choice_good,
				  (SELECT 
				    COUNT(answer' at line 23 with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  teacher_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND teacher_id = '32' AND subj_id = '2' ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id = '32' AND subj_id = '2' ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id` = '32' AND subj_id = '2' ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id = '32' AND subj_id = '2' ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id = '32' AND subj_id = '2' ) AS choice_excellent
				FROM
				 studentevaluations AS se
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` = '32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 02:40:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:40:52 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '` = '32' AND subj_id = '2' ) AS choice_good,
				  (SELECT 
				    COUNT(answer' at line 23 with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  teacher_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND teacher_id = '32' AND subj_id = '2' ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id = '32' AND subj_id = '2' ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id` = '32' AND subj_id = '2' ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id = '32' AND subj_id = '2' ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id = '32' AND subj_id = '2' ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` = '32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 02:40:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:42:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:42:59 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'se.teacher_id' in 'where clause' with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = '2') AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = '2') AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = '2') AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = '2') AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = '2') AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` = '32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 02:43:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:43:16 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'se.teacher_id' in 'where clause' with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = '2') AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = '2') AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = '2') AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = '2') AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = '2') AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` = '32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 02:43:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:44:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 02:44:18 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 's.id' in 'where clause' with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = '2') AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = '2') AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = '2') AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = '2') AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = '2') AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id = '32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 02:44:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:44:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:44:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:47:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:47:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:47:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:49:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:51:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:51:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:51:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:51:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:54:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:54:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:59:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:59:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 02:59:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:00:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:00:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:03:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:03:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:03:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:03:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:03:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:05:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:07:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:07:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:07:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:07:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:07:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:07:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:08:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:08:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:08:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:13:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 03:13:44 --> Notice - Undefined variable: key in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 81
WARNING - 2014-10-01 03:13:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:14:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:14:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:14:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:14:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:14:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:14:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:15:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:16:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:16:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:16:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:16:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:16:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:16:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:16:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:17:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:17:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:17:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:17:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:17:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:17:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:17:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:17:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:18:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 03:18:13 --> Parsing Error - syntax error, unexpected ';' in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 83
WARNING - 2014-10-01 03:18:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:18:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:18:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:18:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:18:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:19:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:19:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:19:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:19:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:20:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:20:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:21:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:21:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:21:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:22:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:22:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:22:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:22:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:23:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:23:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:23:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:23:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:23:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:23:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:23:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:23:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:24:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:24:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:24:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:24:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:25:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:25:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:25:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:25:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:25:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:26:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:26:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:26:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:26:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:26:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:26:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:28:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:28:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:30:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:30:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:31:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:31:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:35:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:36:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:36:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:36:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:39:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:39:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:39:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:39:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:39:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:40:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:41:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:42:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:42:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:42:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:42:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:42:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:42:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:42:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:45:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:45:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:46:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 03:46:34 --> Notice - Undefined variable: user in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\teacher\template.php on line 57
WARNING - 2014-10-01 03:47:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:47:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:47:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:48:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:48:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:48:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:48:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:48:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:49:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:49:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:49:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:49:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:49:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:49:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:50:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:51:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:51:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:51:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:51:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:51:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:52:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:52:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:52:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:52:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:52:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:53:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:54:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:55:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 03:56:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 06:36:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 06:36:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 06:42:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 06:42:55 --> Error - Could not find asset: jquery.mixitup.min in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\asset\instance.php on line 249
WARNING - 2014-10-01 06:42:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 06:44:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 06:44:30 --> Error - Could not find asset: jquery.mixitup.min in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\asset\instance.php on line 249
WARNING - 2014-10-01 06:44:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 06:44:31 --> Error - Could not find asset: jquery.mixitup.min in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\asset\instance.php on line 249
WARNING - 2014-10-01 06:44:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 06:44:52 --> Error - Could not find asset: jquery.vegas in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\asset\instance.php on line 249
WARNING - 2014-10-01 06:44:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 06:45:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 06:45:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 06:45:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 06:45:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 06:47:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 07:00:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 07:00:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 07:00:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 07:02:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 07:03:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 07:03:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 07:04:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:11:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:11:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:12:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:26:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:26:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:26:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:26:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:27:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:27:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:27:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:27:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:27:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:27:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:27:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:27:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:39:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:39:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:39:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:39:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:39:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:39:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:40:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:40:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:40:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:40:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:40:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:40:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 08:41:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:01:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:01:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:02:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:02:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:02:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:02:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:02:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:02:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:02:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:02:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:02:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:27:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:27:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:27:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:27:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:27:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:27:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:27:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:28:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:29:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:29:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:29:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:29:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:29:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:29:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:29:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:29:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:29:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:30:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:30:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:30:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:30:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:30:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:30:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:31:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:31:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:31:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:31:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:31:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:31:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:31:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:31:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:31:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:32:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:32:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:32:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:32:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:32:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:32:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:32:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:33:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:33:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:33:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:33:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:34:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 10:34:18 --> Notice - Undefined offset: 0 in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\student\subject.php on line 63
WARNING - 2014-10-01 10:34:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:34:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:34:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:34:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:34:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:34:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:34:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:34:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:34:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:35:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 10:35:30 --> Notice - Undefined offset: 0 in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\student\subject.php on line 63
WARNING - 2014-10-01 10:35:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:35:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:35:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 10:36:08 --> Error - Could not find asset: jquery.mixitup.min in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\asset\instance.php on line 249
WARNING - 2014-10-01 10:36:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:36:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:37:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:38:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:39:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:39:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 10:39:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:07:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:07:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:07:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:08:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:08:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:08:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:08:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:10:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 14:10:25 --> Notice - Undefined offset: 0 in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\student\subject.php on line 63
WARNING - 2014-10-01 14:13:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:13:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:13:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:17:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:17:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:17:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:17:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:17:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:21:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:22:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:22:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:23:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 14:23:21 --> Notice - Undefined variable: current_user in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\student\subject.php on line 49
WARNING - 2014-10-01 14:23:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 14:23:35 --> Notice - Undefined offset: 0 in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\student\subject.php on line 63
WARNING - 2014-10-01 14:23:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:24:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 14:24:57 --> Notice - Undefined index: subj_code in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\student\subject.php on line 63
WARNING - 2014-10-01 14:24:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:27:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 14:27:49 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `subj_stud` AS ss
			INNER JOIN `subjects` AS s ON s.`id` = ss.`subj_id` 
	' at line 1 with query: "SELECT *,  FROM `subj_stud` AS ss
			INNER JOIN `subjects` AS s ON s.`id` = ss.`subj_id` 
			INNER JOIN `users` AS u ON u.`id` = s.`teacher_id` 
			WHERE ss.`id` = 3" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 14:27:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:28:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 14:28:17 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `subj_stud` AS ss
			INNER JOIN `subjects` AS s ON s.`id` = ss.`subj_id` 
	' at line 1 with query: "SELECT *,  FROM `subj_stud` AS ss
			INNER JOIN `subjects` AS s ON s.`id` = ss.`subj_id` 
			INNER JOIN `users` AS u ON u.`id` = s.`teacher_id` 
			WHERE ss.`id` = 3" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 14:28:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:28:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 14:28:22 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'FROM `subj_stud` AS ss
			INNER JOIN `subjects` AS s ON s.`id` = ss.`subj_id` 
	' at line 1 with query: "SELECT *,  FROM `subj_stud` AS ss
			INNER JOIN `subjects` AS s ON s.`id` = ss.`subj_id` 
			INNER JOIN `users` AS u ON u.`id` = s.`teacher_id` 
			WHERE ss.`id` = 3" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-01 14:28:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:28:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 14:28:57 --> Notice - Trying to get property of non-object in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\student\subject.php on line 63
WARNING - 2014-10-01 14:28:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:29:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-01 14:29:33 --> Notice - Undefined offset: 0 in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\student\subject.php on line 63
WARNING - 2014-10-01 14:30:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:30:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:30:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:31:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:31:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:32:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:33:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:33:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:33:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:33:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:33:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:33:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:33:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-01 14:33:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
