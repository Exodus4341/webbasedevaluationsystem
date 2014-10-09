<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2014-09-21 05:14:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:14:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:14:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:14:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:14:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:15:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:15:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:25:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:25:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:26:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:26:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:40:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:40:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 05:40:36 --> Notice - Undefined variable: category in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\admin\studentevaluation.php on line 133
WARNING - 2014-09-21 05:41:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 05:41:22 --> Notice - Undefined variable: teach_id in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\admin\studentevaluation.php on line 140
WARNING - 2014-09-21 05:41:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:41:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:42:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 05:42:51 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHE' at line 7 with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  s.`id` AS `sid`
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = `sid` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = `sid` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = `sid` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = `sid` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = `sid` ) AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND subj_id = `sid` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 05:44:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:44:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 05:44:18 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHE' at line 7 with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  s.`id` AS `sid`
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = `sid` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = `sid` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = `sid` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = `sid` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = `sid` ) AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND subj_id = `sid` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 05:46:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 05:46:31 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHE' at line 7 with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  s.`id` AS `sid`
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 05:48:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 05:48:02 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHE' at line 7 with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  s.`id` AS `sid`
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = 1 ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = 1 ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = 1 ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = 1 ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = 1 ) AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND subj_id = 1 GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 05:50:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 05:50:37 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'teacher_id' in field list is ambiguous with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = 1 ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = 1 ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = 1 ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = 1 ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = 1 ) AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND subj_id = 1 GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 05:50:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:50:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:51:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 05:51:46 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'teacher_id' in field list is ambiguous with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = '1' ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = '1' ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = '1' ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = '1' ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = '1' ) AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND subj_id = '1' GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 05:51:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:51:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 05:56:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 05:56:40 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'teacher_id' in field list is ambiguous with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='35' AND subj_id = '1' ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='35' AND subj_id = '1' ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='35' AND subj_id = '1' ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='35' AND subj_id = '1' ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='35' AND subj_id = '1' ) AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='35' AND subj_id = '1' GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:01:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:01:03 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'teacher_id' in field list is ambiguous with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' AND subj_id = '1' ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = '1' ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = '1' ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = '1' ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = '1' ) AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND subj_id = '1' GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:01:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:01:47 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'teacher_id' in field list is ambiguous with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '1'  AND teacher_id ='32' ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' ) AS choice_excellent
				FROM
				 studentevaluations 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:03:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:03:47 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'teacher_id' in field list is ambiguous with query: "SELECT 
				  stud_id,
				  teacher_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' ) AS choice_excellent
				FROM
				 studentevaluations AS se
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:04:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:04:59 --> Notice - Undefined variable: category in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\view_subjects.php on line 31
WARNING - 2014-09-21 06:05:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:05:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:05:52 --> Notice - Undefined variable: category in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\view_subjects.php on line 31
WARNING - 2014-09-21 06:07:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:08:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:09:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:09:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:09:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:09:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:09:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:09:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:10:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:11:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:11:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:12:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:14:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:14:30 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 's' with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s 
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND se.`subj_id` = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND se.`subj_id` = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND se.`subj_id` = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND se.`subj_id` = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND se.`subj_id` = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations AS se INNER JOIN `subjecs` AS s
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND se.`subj_id` = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:16:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:16:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:16:24 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1066 Not unique table/alias: 's' with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' ) AS choice_excellent
				FROM
				 studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer INNER JOIN `subjects` AS s  
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:17:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:17:36 --> Error - SQLSTATE[42S02]: Base table or view not found: 1146 Table 'webbasedevaluationsystem.subjecs' doesn't exist with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' ) AS choice_excellent
				FROM
				 studentevaluations AS se INNER JOIN `subjecs` AS s ON se.`subj_id` = s.`id`
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer 
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:18:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:18:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:25:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:25:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:25:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:25:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:26:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:27:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:27:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:30:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:30:10 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
			' at line 6 with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  s.`id` AS sid
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND sid = se.`subj_id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND sid = se.`subj_id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND sid = se.`subj_id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND sid = se.`subj_id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND sid = se.`subj_id` ) AS choice_excellent
				FROM
				 studentevaluations AS se 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch INNER JOIN `subjects` AS s
				    ON ch.`id` = answer 
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND sid = se.`subj_id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:30:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:30:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:32:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:32:06 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
			' at line 6 with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  s.`id` AS sid
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND sid = subj_id ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND sid = subj_id ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND sid = subj_id ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND sid = subj_id ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se 
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND sid = subj_id ) AS choice_excellent
				FROM
				 studentevaluations AS se 
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch INNER JOIN `subjects` AS s
				    ON ch.`id` = answer 
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND sid = subj_id GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:32:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:32:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:34:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:34:50 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '(SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHER' at line 7 with query: "SELECT 
				  stud_id,
				  subj_id,
				  teacher_id,
				  category_id,
				  s.`id` AS sid
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND teacher_id ='32' AND sid = subj_id ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND sid = subj_id ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND sid = subj_id ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND sid = subj_id ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND sid = subj_id ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch INNER JOIN `subjects` AS s
				    ON ch.`id` = answer 
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND sid = subj_id GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:34:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:34:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:35:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:35:05 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'teacher_id' in field list is ambiguous with query: "SELECT 
				  stud_id,
				  subj_id,
				  teacher_id,
				  category_id,
				  s.`id` AS sid,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND teacher_id ='32' AND sid = subj_id ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND sid = subj_id ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND sid = subj_id ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND sid = subj_id ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND sid = subj_id ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch INNER JOIN `subjects` AS s
				    ON ch.`id` = answer 
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND sid = subj_id GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:38:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:38:39 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'teacher_id' in field list is ambiguous with query: "SELECT 
				  stud_id,
				  subj_id,
				  teacher_id,
				  category_id,
				  s.`id` AS sid,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND teacher_id ='32' AND sid = subj_id ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND sid = subj_id ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND sid = subj_id ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND sid = subj_id ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND sid = subj_id ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch INNER JOIN `subjects` AS s
				    ON ch.`id` = answer 
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND sid = subj_id GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:38:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:38:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:39:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:39:19 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 's.id' in 'field list' with query: "SELECT 
				  stud_id,
				  subj_id,
				  teacher_id,
				  category_id,
				  s.`id` AS sid,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND teacher_id ='32' AND sid = subj_id ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND sid = subj_id ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND sid = subj_id ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND sid = subj_id ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND sid = subj_id ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer 
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND sid = subj_id GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:39:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:39:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:42:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:42:41 --> Notice - Array to string conversion in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\admin\studentevaluation.php on line 104
WARNING - 2014-09-21 06:42:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:42:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:43:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:43:49 --> 4096 - Object of class Fuel\Core\Database_Result_Cached could not be converted to string in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\admin\studentevaluation.php on line 104
WARNING - 2014-09-21 06:46:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:46:51 --> 23000 - SQLSTATE[23000]: Integrity constraint violation: 1052 Column 'teacher_id' in field list is ambiguous with query: "SELECT 
				  stud_id,
				  subj_id,
				  teacher_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND teacher_id ='32' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:47:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:47:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:48:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:48:24 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'se.teacher_id' in 'where clause' with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:48:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:48:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:48:26 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'se.teacher_id' in 'where clause' with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:48:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:48:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:48:26 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'se.teacher_id' in 'where clause' with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:48:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:48:26 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'se.teacher_id' in 'where clause' with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
ERROR - 2014-09-21 06:48:26 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'se.teacher_id' in 'where clause' with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:48:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:48:26 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'se.teacher_id' in 'where clause' with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:48:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:48:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:49:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 06:49:01 --> Error - SQLSTATE[42S22]: Column not found: 1054 Unknown column 'se.teacher_id' in 'where clause' with query: "SELECT 
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` ='32' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` ='32' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-09-21 06:49:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:52:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:53:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:53:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:53:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:54:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:54:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:54:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:55:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:55:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 06:57:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:01:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:01:57 --> Warning - Missing argument 1 for Fuel\Core\DB::query(), called in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\admin\studentevaluation.php on line 76 and defined in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\db.php on line 46
WARNING - 2014-09-21 07:02:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:02:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:02:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:02:34 --> Notice - Undefined index: pic_url in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 7
WARNING - 2014-09-21 07:02:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:02:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:04:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:04:55 --> Notice - Undefined index: subj_code in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 15
WARNING - 2014-09-21 07:05:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:05:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:06:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:07:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:07:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:08:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:08:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:08:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:08:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:10:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:10:01 --> Notice - Undefined index: pic_url in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 6
WARNING - 2014-09-21 07:10:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:11:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:11:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:11:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:11:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:11:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:11:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:11:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:12:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:12:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:12:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:12:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:12:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:12:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:14:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:14:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:14:57 --> Notice - Array to string conversion in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 48
WARNING - 2014-09-21 07:16:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:16:09 --> Notice - Array to string conversion in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 48
WARNING - 2014-09-21 07:16:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:16:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:16:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:16:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:18:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:18:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:19:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:19:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:19:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:19:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:20:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:20:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:20:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:20:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:20:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:20:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:21:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:21:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:21:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:21:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:28:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:29:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:29:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:29:08 --> Notice - Undefined offset: 5 in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 68
WARNING - 2014-09-21 07:29:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:29:36 --> Notice - Undefined offset: 5 in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 68
WARNING - 2014-09-21 07:29:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:29:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:29:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:29:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:30:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:31:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:31:42 --> Parsing Error - syntax error, unexpected ',' in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 47
WARNING - 2014-09-21 07:32:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:33:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:33:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:33:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:33:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:33:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:34:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:34:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:34:12 --> Warning - max(): When only one parameter is given, it must be an array in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 47
WARNING - 2014-09-21 07:34:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:37:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:37:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:41:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:41:45 --> Parsing Error - syntax error, unexpected 'if' (T_IF) in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 53
WARNING - 2014-09-21 07:42:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 07:42:10 --> Parsing Error - syntax error, unexpected 'if' (T_IF), expecting ',' or ';' in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 53
WARNING - 2014-09-21 07:43:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 07:55:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:04:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:04:43 --> Notice - Undefined variable: e in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 66
WARNING - 2014-09-21 08:04:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:04:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:05:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:05:02 --> Notice - Undefined variable: e in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 66
WARNING - 2014-09-21 08:05:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:05:17 --> Notice - Undefined variable: e in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 61
WARNING - 2014-09-21 08:05:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:05:53 --> Notice - Undefined variable: e1 in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 61
WARNING - 2014-09-21 08:05:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:05:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:06:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:06:26 --> Notice - Undefined offset: 5 in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 58
WARNING - 2014-09-21 08:06:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:06:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:06:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:13:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:14:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:14:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:14:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:14:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:14:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:15:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:16:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:16:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:16:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:17:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:17:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:17:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:18:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:18:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:18:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:21:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:22:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:22:41 --> Notice - Array to string conversion in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 58
WARNING - 2014-09-21 08:23:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:23:19 --> Warning - Invalid argument supplied for foreach() in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 57
WARNING - 2014-09-21 08:23:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:24:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:24:24 --> Notice - Undefined variable: key in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 53
WARNING - 2014-09-21 08:24:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:24:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:24:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:24:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:24:49 --> Warning - Illegal string offset 'choice_very_good' in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 53
WARNING - 2014-09-21 08:25:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:25:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:25:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:27:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:28:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:28:43 --> Notice - Array to string conversion in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 54
WARNING - 2014-09-21 08:28:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:29:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:29:14 --> Parsing Error - syntax error, unexpected '.' in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 54
WARNING - 2014-09-21 08:29:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:29:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:29:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:29:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:30:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:30:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:31:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:31:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:32:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:32:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:32:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:33:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:34:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:34:40 --> Parsing Error - syntax error, unexpected '"</td>' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 55
WARNING - 2014-09-21 08:34:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:34:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:34:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:36:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:36:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:36:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:38:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:38:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:38:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:39:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:40:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:40:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:42:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:42:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:42:56 --> Parsing Error - syntax error, unexpected '.' in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 54
WARNING - 2014-09-21 08:42:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:43:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:44:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:44:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:45:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:47:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:47:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:47:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:48:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:49:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:49:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:49:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:50:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:50:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:50:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:53:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:54:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 08:54:42 --> Warning - Illegal string offset 'choice_very_good' in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 53
WARNING - 2014-09-21 08:54:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:54:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 08:54:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 09:01:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 09:01:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 09:01:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-09-21 09:25:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-09-21 09:25:38 --> Error - Maximum execution time of 30 seconds exceeded in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 187
