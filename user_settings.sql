CREATE TABLE user_settings (
    user_id INT PRIMARY KEY,
    theme VARCHAR(50) DEFAULT 'light',
    backgroundColor VARCHAR(50) DEFAULT 'blue',
    language VARCHAR(50) DEFAULT 'en',
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);