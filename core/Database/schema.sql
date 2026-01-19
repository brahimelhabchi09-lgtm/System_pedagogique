
CREATE DATABASE pedagogical_management;


CREATE TYPE user_role AS ENUM ('ADMIN', 'TEACHER', 'STUDENT');

CREATE TYPE brief_type AS ENUM ('INDIVIDUAL', 'COLLECTIVE');

CREATE TYPE skill_level AS ENUM ('IMITER', 'S_ADAPTER', 'TRANSPOSER');

CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    age INT,
    email VARCHAR(150) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role user_role NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP
);

CREATE TABLE classes (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image_url TEXT,
    student_count INT DEFAULT 0,
    teacher_id INT REFERENCES users(id),
    grade VARCHAR(10),
    school_year VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP
);

ALTER TABLE users
ADD COLUMN class_id INT REFERENCES classes(id);

CREATE TABLE sprints (
    id SERIAL PRIMARY KEY,
    class_id INT NOT NULL REFERENCES classes(id) ON DELETE CASCADE,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    start_date DATE,
    end_date DATE,
    sprint_order INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP
);

CREATE TABLE briefs (
    id SERIAL PRIMARY KEY,
    sprint_id INT NOT NULL REFERENCES sprints(id) ON DELETE CASCADE,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    content TEXT,
    brief_type brief_type NOT NULL,
    start_date DATE,
    end_date DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP
);

CREATE TABLE skills (
    id SERIAL PRIMARY KEY,
    code VARCHAR(10) UNIQUE NOT NULL,
    title VARCHAR(150) NOT NULL,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP
);

CREATE TABLE brief_skill (
    brief_id INT REFERENCES briefs(id) ON DELETE CASCADE,
    skill_id INT REFERENCES skills(id) ON DELETE CASCADE,
    PRIMARY KEY (brief_id, skill_id)
);

CREATE TABLE submissions (
    id SERIAL PRIMARY KEY,
    brief_id INT REFERENCES briefs(id) ON DELETE CASCADE,
    student_id INT REFERENCES users(id) ON DELETE CASCADE,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP
);

CREATE TABLE debriefings (
    id SERIAL PRIMARY KEY,
    student_id INT REFERENCES users(id) ON DELETE CASCADE,
    teacher_id INT REFERENCES users(id),
    brief_id INT REFERENCES briefs(id),
    skill_id INT REFERENCES skills(id),
    level skill_level NOT NULL,
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE INDEX idx_users_role ON users(role);
CREATE INDEX idx_sprints_class ON sprints(class_id);
CREATE INDEX idx_briefs_sprint ON briefs(sprint_id);
CREATE INDEX idx_debriefings_student ON debriefings(student_id);
CREATE INDEX idx_debriefings_brief ON debriefings(brief_id);
