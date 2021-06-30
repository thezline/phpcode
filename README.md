# PHP Course (MVC)

Copy the folder in htdocs (xampp) or www (wamp) and start localhost in your browser.

Example:
> http://localhost/[dir]

## Database query
```mysql
CREATE DATABASE tienda;
USE tienda;

CREATE TABLE IF NOT EXISTS users (
    id int AUTO_INCREMENT UNIQUE,
    name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    pass VARCHAR(150) NOT NULL,
    createdAt date NOT NULL,
    PRIMARY KEY (id, email)
) AUTO_INCREMENT = 100;

CREATE TABLE IF NOT EXISTS products (
	id int AUTO_INCREMENT UNIQUE,
    name VARCHAR(30) NOT NULL,
    category VARCHAR(30) NOT NULL,
    description VARCHAR(1000) NOT NULL,
    price int NOT NULL,
    PRIMARY KEY (id)
) AUTO_INCREMENT = 100;

CREATE TABLE IF NOT EXISTS orders (
    id int AUTO_INCREMENT UNIQUE,
    fecha date NOT NULL,
    total int NOT NULL,
    id_user int,
    id_product int,
    PRIMARY KEY (id),
    CONSTRAINT pk_user FOREIGN KEY (id_user) REFERENCES users (id),
    CONSTRAINT pk_product FOREIGN KEY (id_product) REFERENCES products (id)
) AUTO_INCREMENT = 100;

INSERT INTO `products` (`name`, `category`, `description`, `price`) VALUES
('GTA V', 'Action', 'Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit', 23),
('CSGO', 'Shooter', 'Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit', 21),
('Far Cry 6', 'Action', 'Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit', 34),
('Soulcalibur VI', 'Mediaval', 'Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit', 43),
('God Of War', 'Science', 'Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit', 24),
('Assassin\'s Creed: Odyssey', 'History', 'Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit', 42),
('Detroit: Become Human', 'Science', 'Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit', 34),
('Halo Infinity', 'Science', 'Lorem ipsum dolor sit amet consectetur adipiscing elit hendrerit', 43);
```
## Config database
root dir > config.php
```php
/**
 * Global and constant values
 */

define("urlsite",'http://localhost/finished/');
define("server",'');
define("user",'');
define("password",'');
define("database",'');
```