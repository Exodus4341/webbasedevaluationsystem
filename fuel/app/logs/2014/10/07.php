<?php defined('COREPATH') or exit('No direct script access allowed'); ?>

WARNING - 2014-10-07 07:55:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:55:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:55:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:55:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:55:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:55:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:57:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:57:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:58:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:58:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:58:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:58:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:58:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:58:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:59:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 07:59:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:00:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:00:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:00:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:00:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:00:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:00:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:01:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:01:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:01:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:01:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:01:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:01:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:01:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:01:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:01:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:02:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:02:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 08:02:59 --> Notice - Undefined index: sid in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\view_subjects.php on line 64
WARNING - 2014-10-07 08:03:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 08:03:27 --> Notice - Undefined index: sid in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\view_subjects.php on line 64
WARNING - 2014-10-07 08:03:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:03:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:03:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:04:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:04:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 08:04:20 --> Notice - Undefined index: sid in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\view_subjects.php on line 64
WARNING - 2014-10-07 08:05:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 08:05:37 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) ' at line 3 with query: "SELECT 
				  s.`id` AS sid
				  stud_id,
				  subj_id,
				  category_id,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '1' AND se.`teacher_id` = '35' AND subj_id = s.`id` ) AS choice_poor,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '2'  AND se.`teacher_id` = '35' AND subj_id = s.`id` ) AS choice_fair,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '3'  AND se.`teacher_id` = '35' AND subj_id = s.`id` ) AS choice_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '4' AND se.`teacher_id` = '35' AND subj_id = s.`id` ) AS choice_very_good,
				  (SELECT 
				    COUNT(answer) 
				  FROM
				    studentevaluations AS se
				  WHERE category_id = ct.`id` 
				    AND answer = '5'  AND se.`teacher_id` = '35' AND subj_id = s.`id` ) AS choice_excellent
				FROM
				 studentevaluations AS se
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch
				    ON ch.`id` = answer INNER JOIN `subjects` AS s
				WHERE category_id IN ('1','2','3','4','5') AND se.`teacher_id` = '35' AND subj_id = s.`id` GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-07 08:06:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 08:06:17 --> Notice - Undefined index: sid in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\view_subjects.php on line 64
WARNING - 2014-10-07 08:06:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:06:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:06:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:06:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:07:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 08:07:45 --> Notice - Undefined index: sid in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\view_subjects.php on line 64
WARNING - 2014-10-07 08:09:38 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:09:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:09:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:09:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:09:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:09:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:09:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:10:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:10:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:10:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:10:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:11:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:11:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:11:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:11:10 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:11:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:11:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:11:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:12:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:12:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:12:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:12:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:12:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:13:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:13:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:13:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:16:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:20:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:21:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:21:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:21:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:22:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:23:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:23:54 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:31 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:24:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:25:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:25:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:25:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:25:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:25:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:25:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:25:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:25:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:26:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:26:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:26:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:26:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:26:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:26:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:26:26 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:26:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:26:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:27:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:27:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:27:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:27:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:27:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:27:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:28:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:28:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 08:28:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:34:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:32 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:33 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:35 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:35:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:36:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:11 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:29 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:37:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:38:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:38:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:38:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 11:38:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:11:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:14:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:14:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:14:09 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:14:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:14:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:14:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:16:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:16:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:16:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:16:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:16:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:16:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:16:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:17:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:17:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:17:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:24:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:24:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:26:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:27:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 12:27:06 --> Error - Invalid method call.  Method select does not exist. in C:\wamp\www\webbasedevaluationsystem\fuel\packages\orm\classes\model.php on line 612
WARNING - 2014-10-07 12:27:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:27:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:27:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:28:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 12:28:01 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'WHERE `group` = '50'' at line 1 with query: "SELECT `username` WHERE `group` = '50'" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-07 12:28:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:29:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:31:51 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:33:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:35:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:35:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:37:40 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:51:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:51:53 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:52:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:52:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:52:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:52:19 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:52:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:52:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:52:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:52:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 12:52:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:05:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:11:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:12:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:12:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:13:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:13:08 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:13:13 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:14:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:14:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:15:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 13:15:44 --> Notice - Undefined index: chc in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 53
WARNING - 2014-10-07 13:15:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 13:15:55 --> Notice - Undefined index: chc in C:\wamp\www\webbasedevaluationsystem\fuel\app\views\admin\studentevaluation\result_evaluation.php on line 53
WARNING - 2014-10-07 13:16:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:18:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:19:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:19:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:21:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:21:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:21:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:21:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:22:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:22:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:22:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:22:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:22:37 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:22:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:23:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:23:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:24:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:25:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:25:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:25:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:25:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:25:20 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:25:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:25:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:25:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:25:47 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:26:17 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:33:27 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:33:34 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:34:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:34:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:42:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:42:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:49:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:49:57 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:50:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:50:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:51:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:51:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:51:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:51:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:51:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:51:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:52:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:53:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:54:41 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:55:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:57:28 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 13:57:28 --> Notice - Undefined index: uid in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\admin\studentevaluation.php on line 30
WARNING - 2014-10-07 13:57:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 13:58:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:01:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 14:01:01 --> Notice - Array to string conversion in C:\wamp\www\webbasedevaluationsystem\fuel\app\classes\controller\admin\studentevaluation.php on line 82
WARNING - 2014-10-07 14:02:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 14:02:46 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ANDsubj_id IN('33') subj_id IN('34') subj_id IN('36') GROUP BY category_id' at line 42 with query: "SELECT 
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
				 studentevaluations AS se
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' ANDsubj_id IN('33') subj_id IN('34') subj_id IN('36') GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-07 14:03:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:04:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:04:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:04:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:04:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:04:45 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:04:50 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:04:58 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:01 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:12 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:15 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:06:22 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:08:02 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
ERROR - 2014-10-07 14:08:02 --> 42000 - SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'ANDsubj_id IN('33') subj_id IN('34') subj_id IN('36') GROUP BY category_id' at line 42 with query: "SELECT 
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
				 studentevaluations AS se
				  INNER JOIN categories AS ct 
				   ON ct.`id` = category_id 
				  INNER JOIN choices AS ch 
				    ON ch.`id` = answer
				WHERE category_id IN ('1','2','3','4','5') AND teacher_id ='32' ANDsubj_id IN('33') subj_id IN('34') subj_id IN('36') GROUP BY category_id" in C:\wamp\www\webbasedevaluationsystem\fuel\core\classes\database\pdo\connection.php on line 208
WARNING - 2014-10-07 14:11:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:13:16 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:13:44 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:13:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:16:14 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:17:56 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:18:18 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:18:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:18:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:24:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:26:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:28:05 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:28:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:28:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:28:23 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:28:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:28:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:28:39 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:29:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:29:43 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:29:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:29:48 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:29:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:29:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:29:55 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:29:59 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:30:04 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:30:07 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:30:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:30:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:30:52 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:31:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:31:00 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:31:03 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:31:06 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:24 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:30 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:36 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:42 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:46 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:32:49 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:39:21 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:39:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
WARNING - 2014-10-07 14:39:25 --> Fuel\Core\Fuel::init - The configured locale en_US is not installed on your system.
