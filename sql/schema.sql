-- TABLE USERS
-- Création de la table
CREATE TABLE users (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `email` VARCHAR(255) NOT NULL,
    `password_hash` VARCHAR(150) NOT NULL,
    `role` VARCHAR(50) NOT NULL
);

-- TABLE PRODUCTS
-- Création de la table
CREATE TABLE products (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `price` DECIMAL (10, 2),
    `description` TEXT,
    `created_at` DATE
);

-- Insertion des données 
INSERT INTO `products` (`id`, `name`, `price`, `description`, `created_at`) VALUES
(1, 'Dalahästen', 49.99, 'Petit cheval traditionnel peint à la main', '2026-01-20'),
(2, 'Nypon soppa', 9.90, 'Boisson à base de cynorhodon (églantine)', '2026-01-20'),
(3, 'Marabou Mintkrokant', 4.50, 'Chocolat au lait aux éclats de caramel à la menthe', '2026-01-20'),
(4, 'Dalahästar tote bag', 14.95, 'Tote bag au motif de Dala', '2026-01-20'),
(5, 'Kanelbulle', 1.50, 'Petite brioche traditionnelle à la cannelle', '2026-01-20'),
(6, 'Alghrens Bilar', 2.49, 'Bonbons guimauve', '2026-01-20'),
(7, 'Knäckebröd', 3.00, 'Pain dur traditionnel', '2026-01-20'),
(8, 'Gravlax 200g', 9.95, 'Saumon mariné aux herbes', '2026-01-20'),
(9, 'Kötbullar 500g', 11.99, 'Boulettes de viande', '2026-01-20');

-- TABLE ORDERS
-- Création de la table
CREATE TABLE orders (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `user_id` INT NOT NULL,
    `created_at` DATE,
    `total` INT
);

-- TABLE PIVOT : ORDER_ITEMS
-- Création de la table
CREATE TABLE order_items (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `order_id` INT,
    `product_id` INT,
    `quantity` INT,
    `unit_price` INT,
);

-- Ajout des clefs étrangères 
ALTER TABLE `order_items`
ADD FOREIGN KEY(`order_id`) REFERENCES orders(`id`),
ADD FOREIGN KEY(`product_id`) REFERENCES products(`id`);