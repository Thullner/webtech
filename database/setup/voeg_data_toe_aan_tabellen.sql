INSERT INTO gebruikers (id, loginnaam, voornaam, achternaam, wachtwoord)
VALUES (1, 'gebruiker', 'Mischa', 'Thullner', '123456');


INSERT INTO auteurs (id, voornaam, achternaam)
VALUES (1, 'J.K.', 'Rowling'),
       (2, 'Brandon', 'Sanderson'),
       (3, 'Patrick', 'Rothfuss'),
       (4, 'Stephen', 'King'),
       (5, 'John', 'Grisham');

INSERT INTO genres (id, naam)
VALUES (1, 'Fantasy'),
       (2, 'Science Fiction'),
       (3, 'Thriller'),
       (4, 'Horror');

INSERT INTO boeken (titel, jaarVanPublicatie, afbeelding, prijs, aantal, auteurId, genreId)
VALUES ('It', 1986, 'it.jpg', 22.50, 3, 4, 4),
       ('The Gunslinger', 1982, 'the-gunslinger.jpg', 14, 2, 4, 1),
       ('The Name of the Wind', 2007, 'the-name-of-the-wind.jpg', 30, 1, 3, 1),
       ('The Wise Man''s Fear', 2011, 'the-wise-man\'s-fear.jpg', 30, 2, 3, 1),
       ('The Final Empire', 2006, 'the-final-empire.jpg', 15, 7, 2, 1),
       ('Skyward', 2018, 'skyward.jpg', 18.25, 11, 2, 2),
       ('Harry Potter and the Philosopher\'s Stone ', 1997, 'harry-potter-and-the-philosopher\'s-stone.jpg', 20.80, 5, 1, 1),
       ('Harry Potter and the Prisoner of Azkaban', 1999, 'harry-potter-and-the-prisoner-of-azkaban.jpg', 23, 5, 1, 1),
       ('The Firm', 1991, 'the-firm.jpg', 5, 10,5, 3),
       ('The Broker', 2005, 'the-broker.jpg', 15.25, 3, 5, 3),
       ('The Pelican Brief', 1992, 'the-pelican-brief.jpg', 22, 4, 5, 3);
