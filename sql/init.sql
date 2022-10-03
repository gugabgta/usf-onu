create table tier (
	id_tier serial primary key,
	name varchar(3),
	weight tinyint
);

insert into tier (name, weight) values ('F', 0), ('D', 1), ('C', 2), ('B', 3), ('A', 4), ('S', 5);

create table fish_attribute (
	id_attribute serial primary key,
	id_fish integer references fish (id_fish),
	intelligence tinyint,
	power tinyint,
	defense tinyint,
	mobility tinyint,
	hp tinyint,
	stealth tinyint
);

create table fish (
	id_fish serial primary key,
	id_attribute integer,
	image_src varchar(300),
	id_tier integer references tier (id_tier),
);
