# CREATE THE SCHEMA 
CREATE SCHEMA tracker;

CREATE TABLE tracker.users
(
	id SERIAL NOT NULL PRIMARY KEY,
	username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
);

CREATE TABLE tracker.categories
(
	id SERIAL NOT NULL PRIMARY KEY,
	name VARCHAR(30) NOT NULL
);

CREATE TABLE tracker.tasks
(
	id SERIAL NOT NULL PRIMARY KEY,
	task TEXT NOT NULL UNIQUE,
    category_id INT NOT NULL REFERENCES public.categories(id)
);

CREATE TABLE tracker.entries
(
	id SERIAL NOT NULL PRIMARY KEY,
    entry_date DATE NOT NULL,
    time_in TIME NOT NULL,
    time_out TIME NOT NULL, 
    lunch_break BOOLEAN NOT NULL,
	task_id INT NOT NULL REFERENCES public.tasks(id)
);