-- Auth stuff

CREATE TABLE IF NOT EXISTS auth_user (id INTEGER PRIMARY KEY, name TEXT, mail TEXT, salt TEXT, hash TEXT);
CREATE TABLE IF NOT EXISTS auth_group (id INTEGER PRIMARY KEY, name TEXT);
CREATE TABLE IF NOT EXISTS auth_position (id INTEGER PRIMARY KEY, user_id INTEGER, group_id INTEGER);

INSERT INTO auth_user (name, mail, salt, hash) VALUES ('admin', 'admin@admin.admin', 'asdfqwer', '0000000000000000');

-- News stuff

CREATE TABLE IF NOT EXISTS news_post (id INTEGER PRIMARY KEY, name TEXT, time INTEGER, user_id INTEGER);
CREATE TABLE IF NOT EXISTS news_category (id INTEGER PRIMARY KEY, name TEXT);
CREATE TABLE IF NOT EXISTS news_categoryinstance (id INTEGER PRIMARY KEY, post_id INTEGER, category_id INTEGER);
CREATE TABLE IF NOT EXISTS news_tag (id INTEGER PRIMARY KEY, name TEXT);
CREATE TABLE IF NOT EXISTS news_taginstance (id INTEGER PRIMARY KEY, post_id INTEGER, tag_id INTEGER);

INSERT INTO news_category (name) VALUES ('Category A');
INSERT INTO news_category (name) VALUES ('Category B');
INSERT INTO news_tag (name) VALUES ('Tag A');
INSERT INTO news_tag (name) VALUES ('Tag B');
INSERT INTO news_post (name, time, user_id) VALUES ('first post!', strftime('%s','now'), 1);
INSERT INTO news_categoryinstance (post_id, category_id) VALUES (1, 1);
INSERT INTO news_taginstance (post_id, tag_id) VALUES (1, 1);
