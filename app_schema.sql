CREATE TABLE todos (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	task CHAR(128) NOT NULL,
	status INTEGER NOT NULL default 0,
	created_at DATETIME default current_timestamp,
	updated_at DATETIME default current_timestamp
);

INSERT INTO todos 
	(id, task)
VALUES
	(NULL, "Get milk"),
	(NULL, "Walk the dog"),
	(NULL, "Learn MVC");

CREATE TABLE lookup (
	id INTEGER PRIMARY KEY AUTOINCREMENT,
	type INTEGER NOT NULL,
	code INTEGER NOT NULL,
	value CHAR(128),
	cssClass CHAR(128)
);

INSERT INTO lookup
	(id, type, code, value, cssClass)
VALUES
	(NULL, 'todo.status', 0, 'new', NULL),
	(NULL, 'todo.status', 1, 'working', 'btn-warning'),
	(NULL, 'todo.status', 2, 'done', 'btn-success'),
	(NULL, 'todo.status', 3, 'archived', NULL);