CREATE DATABASE Job;
USE Job;

CREATE TABLE applicants (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    phone VARCHAR(20),
    qualification VARCHAR(50),
    experience VARCHAR(50),
    job_position VARCHAR(100),
    address TEXT,
    status VARCHAR(20) DEFAULT 'Pending'
);