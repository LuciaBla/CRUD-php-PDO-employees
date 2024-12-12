CREATE DATABASE Kdrama;
USE Kdrama;
CREATE TABLE Kdramas(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(150),
    ano_lanzamiento year,
    popularidad int,
    director varchar(150),
    empresa varchar(150)
);
insert into Kdramas(nombre,ano_lanzamiento,popularidad,director,empresa) values
('Crash Landing on You', 2019, 95, 'Lee Jung-hyo', 'Studio Dragon'), 
('Goblin', 2016, 98, 'Lee Eung-bok', 'Hwa&Dam Pictures'), 
('Itaewon Class', 2020, 90, 'Kim Sung-yoon', 'Showbox'),
('Vincenzo', 2021, 92, 'Kim Hee-won', 'Studio Dragon'), 
('My Love from the Star', 2013, 97, 'Jang Tae-yoo', 'HB Entertainment'), 
('Descendants of the Sun', 2016, 96, 'Lee Eung-bok', 'KBS2'), 
('The Heirs', 2013, 89, 'Kang Shin-hyo', 'Hwa&Dam Pictures'), 
('Strong Woman Do Bong-soon', 2017, 91, 'Lee Hyung-min', 'Drama House'), 
('Hotel Del Luna', 2019, 94, 'Oh Choong-hwan', 'Studio Dragon');