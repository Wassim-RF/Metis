CREATE TABLE IF NOT EXISTS members (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE
);

--@block
CREATE TABLE IF NOT EXISTS projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    duration VARCHAR(50),
    budget DECIMAL(10,2),
    member_id INT NOT NULL,
    type ENUM('court', 'long') NOT NULL,

    FOREIGN KEY (member_id) REFERENCES members(id)
);

--@block
CREATE TABLE activities (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description TEXT NOT NULL,
    project_id INT NOT NULL,

    FOREIGN KEY (project_id) REFERENCES projects(id)
);

--@block
SELECT * FROM members WHERE id = 1;