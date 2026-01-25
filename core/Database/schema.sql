CREATE TYPE user_role AS ENUM ('ADMIN', 'TEACHER', 'STUDENT');

CREATE TYPE formation AS ENUM ('TRONC_COMMUN', 'JAVA', 'JAVASCRIPT', 'AI');

CREATE TYPE grade_enum AS ENUM ('A1', 'A2');

CREATE TYPE brief_type AS ENUM ('INDIVIDUEL', 'COLLECTIF');

CREATE TYPE level_enum AS ENUM ('IMITER', 'S_ADAPTER', 'TRANSPOSER');

CREATE TYPE niveau_enum AS ENUM ('FAIBLE', 'MOYENNE', 'TRES_BIEN');

CREATE TABLE users (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    age INT,
    email VARCHAR(150) UNIQUE NOT NULL,
    phone VARCHAR(30),
    password TEXT NOT NULL,
    role user_role NOT NULL,
    created_at TIMESTAMP DEFAULT now(),
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP
);


CREATE TABLE admins (
    id UUID PRIMARY KEY REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE teachers (
    id UUID PRIMARY KEY REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE students (
    id UUID PRIMARY KEY REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE class (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    name VARCHAR(100),
    image_url TEXT,
    student_count INT,
    created_at TIMESTAMP DEFAULT now(),
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP,
    formation formation,
    grade grade_enum,
    school_year VARCHAR(20),
    teacher_id UUID REFERENCES teachers(id)
);


CREATE TABLE sprint (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    name VARCHAR(100),
    description TEXT,
    start_date TIMESTAMP,
    end_date TIMESTAMP,
    created_at TIMESTAMP DEFAULT now(),
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP
);


CREATE TABLE brief (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    title VARCHAR(150),
    description TEXT,
    content TEXT,
    start_date TIMESTAMP,
    end_date TIMESTAMP,
    type brief_type,
    created_at TIMESTAMP DEFAULT now(),
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP,
    sprint_id UUID REFERENCES sprint(id)
);


CREATE TABLE skill (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    code VARCHAR(50),
    title VARCHAR(150),
    description TEXT,
    level level_enum,
    niveau niveau_enum,
    created_at TIMESTAMP DEFAULT now(),
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP,
    brief_id UUID REFERENCES brief(id)
);


CREATE TABLE submission (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    message TEXT,
    created_at TIMESTAMP DEFAULT now(),
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP,
    student_id UUID REFERENCES students(id),
    brief_id UUID REFERENCES brief(id)
);


CREATE TABLE link (
    id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
    link TEXT,
    created_at TIMESTAMP DEFAULT now(),
    updated_at TIMESTAMP,
    deleted_at TIMESTAMP,
    brief_id UUID REFERENCES brief(id)
);


CREATE TABLE class_students (
    class_id UUID REFERENCES class(id) ON DELETE CASCADE,
    student_id UUID REFERENCES students(id) ON DELETE CASCADE,
    PRIMARY KEY (class_id, student_id)
);


CREATE TABLE sprint_students (
    sprint_id UUID REFERENCES sprint(id) ON DELETE CASCADE,
    student_id UUID REFERENCES students(id) ON DELETE CASCADE,
    PRIMARY KEY (sprint_id, student_id)
);


CREATE EXTENSION IF NOT EXISTS pgcrypto;

