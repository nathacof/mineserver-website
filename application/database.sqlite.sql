-- System revision table
CREATE TABLE IF NOT EXISTS system_version (id INTEGER PRIMARY KEY, name TEXT UNIQUE, version INTEGER);

-- Auth
-- Create tables
CREATE TABLE auth_user (id INTEGER PRIMARY KEY, name TEXT UNIQUE, mail TEXT UNIQUE, salt TEXT, hash TEXT);
CREATE TABLE auth_group (id INTEGER PRIMARY KEY, name TEXT UNIQUE);
CREATE TABLE auth_role (id INTEGER PRIMARY KEY, name TEXT UNIQUE);
CREATE TABLE auth_position (id INTEGER PRIMARY KEY, user_id INTEGER, group_id INTEGER, role_id INTEGER);
-- Update version
REPLACE INTO system_version (name, version) VALUES ('database-auth', 1);

-- News
-- Create tables
CREATE TABLE news_post (id INTEGER PRIMARY KEY, name TEXT, time INTEGER, user_id INTEGER, content TEXT);
CREATE TABLE news_category (id INTEGER PRIMARY KEY, name TEXT UNIQUE);
CREATE TABLE news_post_category (post_id INTEGER, category_id INTEGER);
CREATE TABLE news_tag (id INTEGER PRIMARY KEY, name TEXT UNIQUE);
CREATE TABLE news_post_tag (post_id INTEGER, tag_id INTEGER);
-- Update version
REPLACE INTO system_version (name, version) VALUES ('database-news', 1);
