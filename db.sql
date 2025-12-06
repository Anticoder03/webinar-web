CREATE TABLE courses (
    course_id INT AUTO_INCREMENT PRIMARY KEY,
    course_title VARCHAR(255) NOT NULL,
    course_category VARCHAR(100) NOT NULL,   -- e.g. Medical Coding Training
    institute_name VARCHAR(150) NOT NULL,    -- e.g. Sandes Institute
    banner_image VARCHAR(500) DEFAULT NULL,  -- course image URL
    institute_image VARCHAR(500) DEFAULT NULL, -- teacher/institute image
    ratings DECIMAL(2,1) DEFAULT 0.0,        -- e.g. 4.0
    total_ratings INT DEFAULT 0,             -- (12 ratings)
    students_enrolled INT DEFAULT 0,         -- e.g. 26 Students
    price VARCHAR(50) DEFAULT 'Free',        -- Free / ₹5000 / Paid
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
