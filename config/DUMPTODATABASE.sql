
CREATE TABLE Students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    date_of_birth DATE NOT NULL,
    gender ENUM('Male', 'Female', 'Other') NOT NULL,
    enrollment_date DATE NOT NULL
);

INSERT INTO Students (first_name, last_name, date_of_birth, gender, enrollment_date) VALUES
('John', 'Doe', '2005-04-15', 'Male', '2022-09-01'),
('Jane', 'Smith', '2006-07-20', 'Female', '2022-09-01'),
('Emily', 'Johnson', '2005-11-30', 'Female', '2022-09-01'),
('Michael', 'Brown', '2005-02-10', 'Male', '2022-09-01'),
('Sarah', 'Davis', '2006-05-25', 'Female', '2022-09-01');


CREATE TABLE Teachers (
    teacher_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    subject VARCHAR(100) NOT NULL,
    hire_date DATE NOT NULL
);

INSERT INTO Teachers (first_name, last_name, email, subject, hire_date) VALUES
('Alice', 'Williams', 'alice.williams@example.com', 'Mathematics', '2020-08-15'),
('Bob', 'Jones', 'bob.jones@example.com', 'History', '2019-09-01'),
('Charlie', 'Garcia', 'charlie.garcia@example.com', 'Science', '2021-01-10'),
('Diana', 'Martinez', 'diana.martinez@example.com', 'English', '2018-03-25'),
('Ethan', 'Hernandez', 'ethan.hernandez@example.com', 'Art', '2022-06-12');

CREATE TABLE Documents (
    document_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    upload_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    file_path VARCHAR(255) NOT NULL,
    uploaded_by INT,
    FOREIGN KEY (uploaded_by) REFERENCES Teachers(teacher_id)
);

INSERT INTO Documents (title, upload_date, file_path, uploaded_by) VALUES
('Math Assignment', '2023-01-15 10:00:00', '/uploads/documents/math_assignment.pdf', 1),
('History Project', '2023-02-20 14:30:00', '/uploads/documents/history_project.pdf', 2),
('Science Lab Report', '2023-03-10 09:00:00', '/uploads/documents/science_lab_report.pdf', 3),
('English Essay', '2023-04-05 11:15:00', '/uploads/documents/english_essay.pdf', 4),
('Art Portfolio', '2023-05-18 16:45:00', '/uploads/documents/art_portfolio.pdf', 5);


CREATE TABLE Olympiads (
    olympiad_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    date DATE NOT NULL,
    location VARCHAR(200) NOT NULL,
    description TEXT
);

INSERT INTO Olympiads (name, date, location, description) VALUES
('Math Olympiad', '2023-05-20', 'School Auditorium', 'A competition for the best math students.'),
('Science Fair', '2023-06-15', 'Main Hall', 'A showcase of science projects from students.'),
('Literature Contest', '2023-07-10', 'Library', 'A contest for creative writing and poetry.'),
('Art Exhibition', '2023-08-05', 'Art Gallery', 'An exhibition of students art projects.'),
('History Quiz', '2023-09-12', 'Classroom 101', 'A quiz competition focused on historical events.');

CREATE TABLE Attendance (
    attendance_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    class_date DATE NOT NULL,
    status ENUM('Present', 'Absent', 'Late') NOT NULL,
    FOREIGN KEY (student_id) REFERENCES Students(student_id)
);

INSERT INTO Attendance (student_id, class_date, status) VALUES
(1, '2023-09-01', 'Present'),
(2, '2023-09-01', 'Absent'),
(3, '2023-09-01', 'Present'),
(4, '2023-09-01', 'Late'),
(5, '2023-09-01', 'Present');

CREATE TABLE Classes (
    class_id INT AUTO_INCREMENT PRIMARY KEY,
    class_name VARCHAR(100) NOT NULL,
    teacher_id INT,
    schedule VARCHAR(255) NOT NULL,
    FOREIGN KEY (teacher_id) REFERENCES Teachers(teacher_id)
);

INSERT INTO Classes (class_name, teacher_id, schedule) VALUES
('Mathematics 101', 1, 'Mon/Wed/Fri 10:00-11:00'),
('History 201', 2, 'Tue/Thu 11:00-12:30'),
('Science 301', 3, 'Mon/Wed 13:00-14:30'),
('English Literature', 4, 'Tue/Thu 09:00-10:30'),
('Art Fundamentals', 5, 'Fri 14:00-16:00');

CREATE TABLE Grades (
    grade_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    subject VARCHAR(100) NOT NULL,
    grade INT NOT NULL,
    semester ENUM('Fall', 'Spring') NOT NULL,
    FOREIGN KEY (student_id) REFERENCES Students(student_id)
);

INSERT INTO Grades (student_id, subject, grade, semester) VALUES
(1, 'Mathematics', 4, 'Fall'),
(2, 'History', 5, 'Fall'),
(3, 'Science', 5, 'Fall'),
(4, 'English', 4, 'Fall'),
(5, 'Art', 4, 'Fall');

CREATE TABLE Olympiad_Results (
    result_id INT AUTO_INCREMENT PRIMARY KEY,
    olympiad_id INT,
    student_id INT,
    position INT,
    FOREIGN KEY (olympiad_id) REFERENCES Olympiads(olympiad_id),
    FOREIGN KEY (student_id) REFERENCES Students(student_id)
);

INSERT INTO Olympiad_Results (olympiad_id, student_id, position) VALUES
(1, 1, 1),
(1, 2, 2),
(2, 3, 3),
(3, 4, 1),
(4, 5, 1);

CREATE TABLE Courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL,
    description TEXT
);

INSERT INTO Courses (course_name, description) VALUES
('Advanced Mathematics', 'A deeper exploration of mathematical concepts.'),
('World History', 'Study of global historical events and figures.'),
('Biology 101', 'Introduction to biological sciences.'),
('Creative Writing', 'Developing writing skills through various genres.'),
('Painting Basics', 'Fundamentals of painting techniques and styles.');

CREATE TABLE Student_Courses (
    student_course_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    course_id INT,
    FOREIGN KEY (student_id) REFERENCES Students(student_id),
    FOREIGN KEY (course_id) REFERENCES Courses(course_id)
);

INSERT INTO Student_Courses (student_id, course_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);