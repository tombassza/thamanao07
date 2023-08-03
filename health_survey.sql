CREATE DATABASE health_survey;

USE health_survey;

CREATE TABLE survey_results (
  id INT AUTO_INCREMENT PRIMARY KEY,
  q1 INT,
  q2 INT,
  q3 INT,
  q4 INT,
  q5 INT,
  q6 INT,
  q7 INT,
  q8 INT,
  q9 INT,
  q10 INT,
  q11 INT,
  q12 INT,
  q13 INT,
  q14 INT,
  q15 INT,
  total_score INT
);


CREATE TABLE assessors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  age INT NOT NULL,
  gender VARCHAR(10) NOT NULL
);
