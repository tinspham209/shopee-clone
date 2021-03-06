# Project: E-commerce Mobile Shopee Website

## Date: 12 - Jan > 16 - Jan - 21

### Functions

- Display Products
  - Top Sale
  - Special Price
  - New Phones
  - Blogs
- View Product
- Add to cart
- Wishlist

### Screenshot

<img src="homepage.png" alt="home-page" width="640" />
<img src="product-cart-screenshot.png" alt="product-page" width="640" />

### Deploy

- [Live Site](link)

### Tech-Stack

- HTML/CSS
- SASS
- PHP
- MySQL
- bootstrap v4.4
- font-awesome
- owl-carouse 2
- jquery
- jquery.isotope v3.0.6

### Explain technical:

- **bootstrap**: styles css
- **SASS**: modern CSS
- **owl-carouse**: Slider items
- **isotope**: filter products

### Directory Structure

```
.
├── .gitignore
├── README.md
├── cart.php
├── footer.php
├── functions.php
├── header.php
├── index.js
├── style.css
├── assets
├── database
  ├── Cart.php
  ├── DBController.php
  ├── Product.js
  └── shopee.sql
├── HTML Template
└── Template
  ├── notFound
    ├── _cart_notFound.php
    └── _wishlist_notFound.php
  ├── _banner-ads.php
  ├── _banner-area.php
  ├── _blogs.php
  ├── _cart-template.php
  ├── _new-phones.php
  ├── _products.php
  ├── _special-price.php
  ├── _top-sale.php
  ├── _wishlist_template.php
  └── ajax.php

```

### Set up

1. Use the cmd to clone repo to your computer

```
git clone https://github.com/tinspham209/shopee-clone
```

2. Install XAMP
3. copy project to `C:\xampp\htdocs`
4. Open XAMP Control Panel
5. Run MySQL, open myphpadmin, create new table name: `shopee`
6. open phpadmin, import file `./database/shopee.sql` to database. After that, we have 4 tables: cart, product, user, wishlist
7. open file `./database/DBController.php`, change config of `$host, $user, $password, $database` to your XAMP config
8. Start Apache
9. Open project by connect to url: `http://localhost:${YOUR_APACHE_PORT}/shopee-clone/index.php`

Example: My Apache PORT: 8888, 8899 & MySQL PORT: 8899

```php
//./database/DBController.php
  protected $host = 'localhost:8899';
  protected $user = 'root';
  protected $password = '';
  protected $database = "shopee";

```

main page url: `http://localhost:8888/shopee-clone/index.php`

phpmyadmin url: `http://localhost:8888/phpmyadmin`

### For Update HTML Template

1. cd to `HTML Template` folder

```
cd ./HTML%20Template
```

2. Generate `style.css` from `.scss` file by this line:

```
npm start
```

3. Download extension: [Live Server](https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer) on VSCode
4. Open project with **Live Server**
5. Update with your idea
6. After that, copy & refactor new html tag to each component on `Template` folder
7. Copy file from `./HTML Template/style.css` to `./styles.css`

### Plan Of Action

- Initial project
- Install library: bootstrap, font-awesome, owl-carouse
- Initial project sass: variables, global style, colors
- Navbar
- Setup Owl Carousel
- Main site
  - Banner Main site
  - Top Sale
  - Special Price
  - Banner ads
  - New Phones
  - Blogs
  - Footer
- Product page
  - Product
  - Product price
  - Policy
  - order details
  - color
  - product qty section
  - size
  - product description
  - add function up & down product qty
- Cart page
  - Shopping cart section
  - shopping cart items
  - cart item
  - product rating
  - product qty
  - product price
  - subTotal section
  - input quantity
- Install XAMP
- Install PHPStorm
- Refactor:
  - `index.html` to `index.php`
  - `product.html` to `product.php`
  - `cart.html` to `cart.php`
- MySQL connection
- Closing connection
- create data table
  - cart
  - product
  - user
  - wishlist
- import data to db
- Connect DB to PHP
- Connect project to product table
- Update `-top-sale.php` with data
- Update `-special-price.php` with data
  - Filter by brand
- Update `-new-phones.php` with data
- Shuffle products
- Product page
  - Click unique product on homepage > Render to `product.php`
- Add to Cart function
- Display product when addToCart
- Cart Items
  - Count
  - Sum
- Delete Cart Item
- Handle Duplicate Product
- Handle SubTotal products
- Wishlist UI
- Wishlist add to cart
- Shopping Cart Add to Wishlist
- Handle Empty Cart
- Handle button `add to cart` on `product.php` when item is on cart

## After this project

I have improve my knowledge about

- Review my HTML/CSS knowledge

I have understand about

- How to use bootstrap v4.4
- use owl-carousel to make slides of products
- use isotope for filter product by brand
- Setup XAMP
- Setup MySQL myphpadmin
- Setup PHPStorm for coding and connect to MariaDB
- how to convert `html` to `php` file
- connect MySQL to project
- update unique product from `db` to `html tag`
- filter in php
- Fetch unique itemID & userID when click addToCart
- Handle Duplicate Product by Unique ID

Next Steps:

- Deploy
