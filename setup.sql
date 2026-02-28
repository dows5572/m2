    -- Database setup for mt2fg1
-- Execute this file in phpMyAdmin (XAMPP) to create database and tables

-- Create database
CREATE DATABASE IF NOT EXISTS mt2fg1;

-- Use the database
USE mt2fg1;

-- Create tblColleges table
CREATE TABLE IF NOT EXISTS tblColleges (
    collegeID VARCHAR(50) PRIMARY KEY,
    collegeName VARCHAR(255) NOT NULL,
    population INT NOT NULL
);

-- Insert sample data (optional)
INSERT INTO tblColleges (collegeID, collegeName, population) VALUES
('C001', 'Engineering College', 5000),
('C002', 'Medical College', 3000),
('C003', 'Arts and Science College', 4500);
