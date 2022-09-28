--
-- Music DB Data v3.1
--
INSERT INTO Genre (Genre_Name) VALUES ("Folk Rock");
SET @genre = last_insert_id();

INSERT INTO Artist (Artist_Name) VALUES ("Jim Croche");
SET @artist = last_insert_id();

INSERT INTO Album (Album_Name, Genre_FK)  VALUES ("You Don't Mess Around with Jim", @genre);
SET @album = last_insert_id();

INSERT INTO Song (Title, Artist_FK, Album_FK, Length, Filesize) values
    ("Operator", @artist, @album, 230, 3509800),
    ("Time in a Bottle", @artist, @album, 150, 2289000),
    ("You Don't Mess Around With Jim", @artist, @album, 182, 2777320),
    ("Photographs and Memories", @artist, @album, 124, 1892240);
    
INSERT INTO Genre (Genre_Name) VALUES ("Rock and Roll");
SET @genre = last_insert_id();
-- SET @genre = 5;
INSERT INTO Artist (Artist_Name) VALUES ("Boston");
SET @artist = last_insert_id();

INSERT INTO Album (Album_Name, Genre_FK)  VALUES ("Boston", @genre);
SET @album = last_insert_id();

INSERT INTO Song (Title, Artist_FK, Album_FK, Length, Filesize) values
    ("Dont' Look Back", @artist, @album, 286, 4364360),
    ("More Than a Feeling", @artist, @album, 286, 4364360),
    ("Peace of Mind", @artist, @album, 302, 4608520),
    ("Rock & Roll Band", @artist, @album, 180, 2745800),
    ("Smokin", @artist, @album, 260, 3967600);

SET @salt=MD5(RAND(LAST_INSERT_ID()));
INSERT INTO User (Password, Salt, First_Name, Last_Name, Email, Is_Admin) VALUES
(SHA2(CONCAT(@salt, "basketball"),512), @salt, "Scott", "Weaver", "sweaver@messiah.edu", 1);

INSERT INTO Media_Type (Media_Type, Constraint_Type, Media_Limit) VALUES
("Audio CD", 1, 74),
("Data CD", 2, 700),
("Thumbdrive 256", 2, 256),
("Audio DVD", 1, 120);

INSERT INTO Playlist (Playlist_Name, Media_Type_FK) VALUES
("Fun Tunes", 1),
("Jammin'", 2);

INSERT INTO User_Playlist VALUES (1,1), (1,2);

INSERT INTO Song_In_Playlist (Playlist_FK, Song_FK, Order_Number) VALUES 
(1, 1, 1),
(1, 2, 2),
(1, 4, 3),
(2, 1, 1),
(2, 2, 2),
(2, 3, 3),
(2, 4, 4);