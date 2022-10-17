create table tier (
	id_tier serial primary key,
	name varchar(3),
	weight tinyint
);

insert into tier (name, weight) values ('F', 0), ('D', 1), ('C', 2), ('B', 3), ('A', 4), ('S', 5);

create table fish (
	id_fish serial primary key,
	name text not null,
	id_attribute integer,
	image_src varchar(300),
	id_tier integer references tier (id_tier),
	description text
);

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

insert into fish (id_fish, name, description) values
	(1, 'Cavalo Marinho', 'Os cavalos-marinhos são peixes ósseos encontrados normalmente em águas rasas. Apresentam tamanho variado, sendo que algumas espécies atingem cerca de 30 centímetros e outras apresentam apenas 13 milímetros de comprimento. Eles são excelentes em camuflagem e são capazes de mudar de cor.'),
	(2, 'Peixe Lua', 'O peixe-lua (nome científico: Mola mola) é uma espécie de peixe ósseo pertencente à família Molidae. Se destaca por sua morfologia, que o difere dos demais peixes. É o peixe ósseo mais pesado do mundo, possui a mesma toxina que os baiacus, e não vive bem em cativeiro.'),
	(3, 'Peixe Voador', 'Exocetídeos (nome científico: Exocoetidae) é uma família de peixes marinhos, conhecidos pelo nome comum de peixes-voadores, que agrupa cerca de 70 espécies repartidas por 7 géneros. A família tem distribuição natural nas águas quentes das regiões tropicais e subtropicais de todos os oceanos, tendo maior diversidade no Pacífico e no Índico.'),
	(4, 'Salmão', 'Salmão é o nome vulgar de várias espécies de peixes da família Salmonidae, que também inclui as trutas, típicos das águas frias do norte da Eurásia e da América. Várias espécies são criadas em aquacultura, especialmente a espécie Salmo salar.'),
	(5, 'Peixe Gato', 'Peixe-gato é um dos vários nomes dados aos peixes da ordem Siluriformes, que também são chamados de bagres. São mais de 2.000 espécies que variam muito em tamanho e ganham esse curioso apelido por causa dos barbilhões, espécie de antenas que se assemelham muito aos bigodes, que o tornam parecidos com os gatinhos.'),
	(6, 'Peixe-arqueiro', 'Os animais deste gênero são conhecidos por uma capacidade inusitada: conseguem disparar jatos d’água contra insetos na superfície enquanto estão submersos. Sua tática é para derrubar os insetos na água, que servirão de alimento para o peixe.'),
	(7, 'Robalo', 'Robalo é um peixe de água salgada do reino Animalia. O nome científico dele é Centropomus undecimalis e possui vários nomes populares para especificar os tipos de robalo, a depender do lugar. Você pode encontrar esse peixe sendo chamada de robalo-flecha, robalo-branco, robalão, entre outras denominações.'),
	(8, 'Bodião Limpador', 'Conhecidos como bodiões-limpadores, Labroides é um gênero de bodiões que são conhecidos por limpar peixes grandes e outros animais como garoupas, jamantas e raias-tubarão nas estações de limpeza em recifes tropicais dos Oceanos Índico e Pacífico.'),
	(9, 'Lúcio-almiscarado', 'O lúcio-almiscarado (Esox masquinongy) é um peixe do gênero Esox. Esta é uma espécie de peixe de água doce grande, relativamente raro da América do Norte, grande e agressiva, que se alimenta de aves, mamíferos, répteis e outros peixes'),
	(10, 'Piranha', 'A palavra "piranha" é derivada da linguagem dos índios Tupis, nativos do Brasil. Ela é a junção da palavra tupi pira, ou "peixe" e ranha, que significa "dente". O peixe piranha pertence a cinco gêneros da subfamília Serrasalminae. A maioria pesa cerca de 250 gramas e atingem um comprimento aproximado de 25 centímetros.'),
	(11, 'Peixe-leao', 'Peixe-leão, peixe-peru, peixe-dragão, peixe-escorpião e peixe-pedra são alguns nomes vulgares para uma grande variedade de peixes marinhos venenosos dos gêneros Pterois, Parapterois, Brachypterois, Ebosia ou Dendrochirus, pertencentes à família Scorpaenidae.[1] Um dos seus representantes mais conhecidos é o peixe-leão-vermelho.'),
	(12, 'Moréia', 'As moréias, também conhecidas como Caramuru pelo povo indígena brasileiro Tupinambá, são peixes teleósteos, anguiliformes, pertencente à família dos munerídeos (Muraenidae), sendo uma de suas principais características o corpo alongado e cilíndrico. Existem mais de 200 espécies de moréias agrupadas dentro de 15 gêneros, sendo que a maior alcança 4 metros de comprimento.'),
	(13, 'Peixe-agulha', 'O termo peixe-agulha refere-se a um grupo de peixes predadores de água salgada caracterizados por bicos pontiagudos proeminentes (rostra) e por seu grande tamanho; alguns têm mais de 4 m. Os peixes de bico existentes incluem o veleiro e o espadim, que compõem a família Istiophoridae; e espadarte, único membro da família Xiphiidae.');

insert into fish_attribute
(id_fish, intelligence, power, defense, mobility, hp, stealth) values
(1, 23, 15, 37, 13, 25, 31),
(2, 11, 14, 10, 55, 93, 20),
(3, 18, 18, 22, 90, 15, 50),
(4, 19, 36, 24, 81, 50, 43),
(5, 18, 41, 70, 42, 60, 56),
(6, 60, 16, 22, 56, 19, 37),
(7, 17, 42, 42, 71, 60, 51),
(8, 30, 3, 9, 80, 21, 30),
(9, 27, 32, 40, 65, 42, 69),
(10, 32, 65, 15, 60, 16, 33),
(11, 18, 18, 91, 23, 15, 38),
(12, 39, 71, 63, 65, 40, 57),
(13, 49, 70, 37, 99, 40, 43);


update fish set image_src = 'https://s3-sa-east-1.amazonaws.com/youportal/fotos/noticias/13801/gd/20-curiosidades-sobre-o-cavalo-marinho_jpge.jpg'
where id_fish = 1;  -- 'Cavalo Marinho'
update fish set image_src = 'https://www.infoescola.com/wp-content/uploads/2010/10/peixa-lua_438562036.jpg'
where id_fish = 2;  -- 'Peixe Lua'
update fish set image_src = 'http://ondasdeleitura.pbworks.com/f/peixe1.jpg'
where id_fish = 3;  -- 'Peixe Voador'
update fish set image_src = 'https://www.infoescola.com/wp-content/uploads/2010/04/salm%C3%A3o_109835651.jpg'
where id_fish = 4;  -- 'Salmão'
update fish set image_src = 'https://st.depositphotos.com/1033034/5036/i/600/depositphotos_50360083-stock-photo-fish-catfish.jpg'
where id_fish = 5;  -- 'Peixe Gato'
update fish set image_src = 'https://images.tcdn.com.br/img/img_prod/749804/peixe_arqueiro_toxotes_jaculatrix_1627_2_ea9f273346963d0447f59736f0060d5a.jpg'
where id_fish = 6;  -- 'Peixe-arqueiro'
update fish set image_src = 'https://panoramadaaquicultura.com.br/wp-content/uploads/2018/06/Snook_522.jpg'
where id_fish = 7;  -- 'Robalo'
update fish set image_src = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNJ1HpUXXSQvAOLqWKhGRCB8onefbolCqH4tP497fId2BwTSky6k2UlgepLMO3bacys40&usqp=CAU'
where id_fish = 8;  -- 'Bodião Limpador'
update fish set image_src = 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Esox_lucius_ZOO_1.jpg/800px-Esox_lucius_ZOO_1.jpg'
where id_fish = 9;  -- 'Lúcio-almiscarado'
update fish set image_src = 'http://d17oknutsq9rw.cloudfront.net/wp-content/uploads/2016/07/04003115/2339404034_92b238a83e_b-e1467605166534-800x496.jpg'
where id_fish = 10; --'Piranha'
update fish set image_src = 'https://static.mundoeducacao.uol.com.br/mundoeducacao/2022/05/peixe-leao.jpg'
where id_fish = 11;
update fish set image_src = 'https://www.infoescola.com/wp-content/uploads/2010/11/mor%C3%A9ia_179904953.jpg'
where id_fish = 12;
update fish set image_src = 'https://billfishwio.com/wp-content/uploads/2020/06/billfish_500x750.png'
where id_fish = 13; --'Peixe-agulha'
